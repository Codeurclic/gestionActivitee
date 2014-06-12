<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Animateur extends CI_Controller {
	
	public function index() {
		if(!$this->estConnecte()) {
			// Page de connexion
			$data['errors'] = array() ;
			$data['titre_page'] = "Page de connexion" ;
			
			
			$this->load->library("form_validation") ;
			// Les règles
			$this->form_validation->set_rules('mail', '"L\'email"', 'valid_email|trim|required|xss_clean') ;
			$this->form_validation->set_rules('mdp', '"Le mot de passe"', 'trim|required|xss_clean|md5');
			
			// Message d'erreurs
			$this->form_validation->set_message('valid_email', 'L\'adresse mail est invalide') ;
			$this->form_validation->set_message('required', '%s est requis') ;
			
			// Règles ok
			if($this->form_validation->run()) {
					
				$mail = $this->input->post('mail') ;
				$mdp = $this->input->post('mdp') ;
					
				// récupérer l'utilisateur ayant le mail entré
				$this->load->model('animateur_model', 'animateurMod') ;
				$result = $this->animateurMod->getAnimateurByMail($mail) ;
				
				if(!empty($result))
					if($result[0]->mdp == $mdp) { // L'utilisateur est connecté
							
						// On initialise les variables de session de l'utilisateur connecté
						$this->session->set_userdata('connected', '1');
						$this->session->set_userdata('idanim', $result['0']->id) ;
						$this->session->set_userdata('admin', $result['0']->admin) ;
						
						$this->accueil() ;
					}else {
						$error = "Vérifiez vos données" ;
						array_push($data['errors'], $error) ;
						$this->afficher("connexion", $data, '', 1) ;
					}
				else { 
					$error = "Vérifiez vos données" ;
					array_push($data['errors'], $error) ;
					$this->afficher("connexion", $data, '', 1) ;
				}
			}else {
				$this->afficher("connexion", $data, '', 1) ;
			}
		}else
			$this->accueil() ;
	}
	
	public function accueil() {
		// Si l'utilisateur est connecté
		if($this->estConnecte()) {
			$header['titre_page'] = "Page d'accueil";
				
			$this->load->model('adherent_model', 'adherentMod');
			$data['nombre_adherents'] = $this->adherentMod->getNombre() ;
			$data['moyenne_age'] = $this->adherentMod->getMoyenneAge()['0']->moyenne_age ;
			$header['menu1'] = 1;
			$this->load->model('projet_model', 'projetMod') ;
			$data['nombre_projet'] = $this->projetMod->getNombre() ;
			$this->afficher("accueil", $header, $data);
			// Bienvenue à la page d'accueil
		}
	}
	
	public function deconnexion() {
		$this->session->sess_destroy() ;
		redirect() ;
	}
	public function estConnecte() {
		if($this->session->userdata('connected'))
			return true ;
		else
			return false ;
	}
	/*----------------------------------------------/
	/** Gestion des rapports journaliers -----------/
	/*---------------------------------------------*/
	public function afficher_rapports() {
		$this->load->model('rapport_model', 'rapportMod');
		$result = $this->rapportMod->getRapports() ;
		$header['menu3'] = 1;
		$header['titre_page'] = "Rapports" ;
		$data['rapports'] = $result ;
		$this->afficher("rapport", $header, $data);
	}
	public function afficher_rapport($id) {
		$this->load->model('rapport_model', 'rapportMod');
		$result = $this->rapportMod->getRapport($id) ;
	}
	public function ajouter_rapport() {
		// Les règles
		$this->load->library('form_validation');
		$this->form_validation->set_rules('texte', '"Texte"', 'trim|required|xss_clean') ;
		
		if($this->form_validation->run()) {
			$texte = $this->input->post('texte') ;
			$anim = $this->session->userdata('idanim') ;
			$temps = time() ;
			
			$this->load->model('rapport_model', 'rapportMod') ;
			$this->rapportMod->ajouterRapport($texte, $anim, $temps) ;
			$this->afficher_rapports();
		}
		
	}
	public function modifier_rapport() {
		$this->form_validation->set_rules('texte', '"Texte"', 'trim|required|xss_clean') ;
		
		if($this->form_validation->run()) {
			$texte = $this->input->post('texte');
			$idrapport = $this->input->post('id') ;
			$temps = time() ;
			$this->load->model('rapport_model', 'rapportMod');
			$this->rapportMod->modifierRapport($id, $texte, $temps);
		}

	}
	public function supprimer_rapport($id) {
		$this->load->model('rapport_model', 'rapportMod');
		$this->rapportMod->supprimerRapport($id);
		$this->afficher_rapports();
	}
	
	/*----------------------------------------------/
        /** Gestion des projets ------------------------/
        /*---------------------------------------------*/
	public function afficher_projets() {
		$this->load->model('projet_model', 'projetMod');
		$result = $this->projetMod->getProjets() ;
		$header['titre_page'] = "Projets" ;
		$data['projets'] = $result ;
		$header['menu4'] = 1;
		$this->afficher("projet", $header, $data);
	}
	public function afficher_projet($id) {
		$this->load->model('projet_model', 'projetMod');
		$result = $this->projetMod->getProjet($id) ;
	}
	public function ajouter_projet() {
		// Les règles
		$this->form_validation->set_rules('titre', '"Titre du projet"', 'trim|required|xss_clean') ;
		
		if($this->form_validation->run()) {
			
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'odt|pdf';
			$config['max_size']	= '100';
			$config['max_width']  = '1024';
			$config['max_height']  = '768';
			
			$this->load->library('upload', $config);
			
			if($this->upload->do_upload()) {
				$lien = "" ; // set link to upload the file
				$titre = $this->input->post('titre') ;
				$anim = $this->session->userdata('idanim') ;
				$temps = time() ;
				
				$this->load->model('projet_model', 'projetMod') ;
				$this->projetMod->ajouterProjet($titre, $lien, $anim, $temps) ;
			}
		}
	}
	public function modifier_projet() {
		$this->form_validation->set_rules('titre', '"Titre"', 'trim|required|xss_clean') ;
		
		if($this->form_validation->run()) {
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'odt|pdf';
			$config['max_size']	= '100';
			$config['max_width']  = '1024';
			$config['max_height']  = '768';
				
			$this->load->library('upload', $config);
				
			if($this->upload->do_upload()) {
				$lien = '' ;
				$titre = $this->input->post('titre');
				$idrapport = $this->input->post('id') ;
				$temps = time() ;
				$this->load->model('projet_model', 'projetMod');
				$this->projetMod->modifierProjet($id, $titre, $file, $temps);
			}
		}
	}
	public function supprimer_projet() {
		$this->load->model('projet_model', 'projetMod');
		$this->projetMod->supprimerProjet($id);
	}
	
	/*----------------------------------------------/
        /** Gestion des adhérents ----------------------/
        /*---------------------------------------------*/
	public function	afficher_adherents() {
		$this->load->model('adherent_model', 'adherentMod');
		$result = $this->adherentMod->getAdherents() ;
		$data['adherents'] = $result;
		$header['titre_page'] = "Liste des adhérents" ;
		$header['menu2'] = 1;
		$this->afficher("adherent", $header, $data);
	}
	public function afficher_adherent() {
		$this->load->model('adherent_model', 'adherentMod');
		$result = $this->adherentMod->getAdherent($id) ;
	}
	public function ajouter_adherent() {
		// Les règles
		$this->load->library('form_validation') ;
		$this->form_validation->set_rules('nom', '"Nom de l\'adherent"', 'trim|required|xss_clean') ;
		$this->form_validation->set_rules('prenom', '"Prénom de l\'adherent"', 'trim|required|xss_clean') ;
		$this->form_validation->set_rules('age', '"Age"', 'trim|required|xss_clean') ;
		$this->form_validation->set_rules('mail', '"Mail"', 'trim|required|xss_clean') ;
		$this->form_validation->set_rules('lycee', '"Lycée"', 'trim|required|xss_clean') ;

		if($this->form_validation->run()) {
			$nom = $this->input->post('nom') ;
			$prenom = $this->input->post('prenom') ;
			$age = $this->input->post('age') ;
			$mail = $this->input->post('mail') ;
			$lycee = $this->input->post('lycee');
			$temps = time() ;
				
			$this->load->model('adherent_model', 'adherentMod') ;
			$this->adherentMod->ajouterAdherent($nom, $prenom, $age, $mail, '', '', $lycee, $temps) ;
			$this->afficher_adherents() ;
		}
	}
	public function modifier_adherent() {
		
		$id = $this->input->post('pk') ;
		$champ = $this->input->post('name') ;
		$value = $this->input->post('value') ;

		$this->load->model('adherent_model', 'adherentMod');
		$this->adherentMod->modifierAdherent($id, $champ, $value);
		
	}
	public function supprimer_adherent($id) {
		$this->load->model('adherent_model', 'adherentMod');
		$this->adherentMod->supprimerAdherent($id);
		$this->afficher_adherents() ;
	}
	
	
	// La fonction qui va s'occuper de générer la vue finale
	public function afficher($vue, $header = array(), $data = array(), $connexion = 0)
	{
		// Check errors variable, if empty, on l'initialise au vide
		if(empty($data['errors']))
			$data['errors'] = array() ;
		 
		if($connexion == 1)
			$this->load->view($vue, $header); 
		else { 
			$this->load->view('header', $header) ;
			$this->load->view($vue, $data);
			$this->load->view('footer') ;
		}
	}
}
