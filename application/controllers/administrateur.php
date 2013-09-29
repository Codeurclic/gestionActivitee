<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Administrateur extends CI_Controller {

	public function index() {
		// Si l'utilisateur est connecté et est admin
		if($this->session->userdata('admin') == 1) {
			$this->afficher_animateurs() ;	
			// Bienvenue à la page d'accueil (gestion des animateurs)
		} else {
			// redirection à la page d'accueil
			redirect() ;
		}
	}

	/*----------------------------------------------/
	 /** Gestion des animateurs ---------------------/
	/*---------------------------------------------*/
	public function	afficher_animateurs() {
		$this->load->model('animateur_model', 'animateurMod');
		$result = $this->animateurMod->getAnimateurs() ;
		$header['titre_page'] = "Administration des animateurs" ;
		$data['animateurs'] = $result ;
		$this->afficher("animateur", $header, $data);
	}
	public function afficher_animateur() {
		$this->load->model('animateur_model', 'animateurMod');
		$result = $this->animateurMod->getAnimateur($id) ;
	}
	public function ajouter_animateur() {
		// Les règles
		$this->load->library('form_validation') ;
		$this->form_validation->set_rules('nom', '"Nom de l\'animateur"', 'trim|required|xss_clean') ;
		$this->form_validation->set_rules('identifiant', '"Identifiant de l\'animateur"', 'trim|required|xss_clean') ;
		$this->form_validation->set_rules('prenom', '"Prénom de l\'animateur"', 'trim|required|xss_clean') ;
		$this->form_validation->set_rules('mdp', '"Mot de passe de l\'animateur"', 'trim|required|xss_clean') ;
		$this->form_validation->set_rules('mail', '"Mail"', 'trim|required|xss_clean') ;
		
		if($this->form_validation->run()) {
			$nom = $this->input->post('nom') ;
			$identifiant = $this->input->post('identifiant') ;
			$prenom = $this->input->post('prenom') ;
			$mdp = md5($this->input->post('mdp'));
			
			$mail = $this->input->post('mail') ;
			$temps = time() ;
			
			if($this->input->post('admin'))
				$admin = 1 ;
			else
				$admin = 0 ;
			
			$this->load->model('animateur_model', 'animateurMod') ;
			$this->animateurMod->ajouterAnimateur($identifiant, $mdp, $nom, $prenom, "", $mail, "", $admin, $temps) ;
			$this->afficher_animateurs() ;
		}
	}
	public function modifier_animateur() {
		$this->form_validation->set_rules('nom', '"Nom de l\'animateur"', 'trim|required|xss_clean') ;
		$this->form_validation->set_rules('prenom', '"Prénom de l\'animateur"', 'trim|required|xss_clean') ;
		$this->form_validation->set_rules('age', '"Age"', 'trim|required|xss_clean') ;
		$this->form_validation->set_rules('mail', '"Mail"', 'trim|required|xss_clean') ;
		$this->form_validation->set_rules('tel', '"Tél"', 'trim|required|xss_clean') ;
		$this->form_validation->set_rules('annee_scolaire', '"Annee scolaire"', 'trim|required|xss_clean') ;
		$this->form_validation->set_rules('lycee', '"Lycée"', 'trim|required|xss_clean') ;
		
		if($this->form_validation->run()) {
			$nom = $this->input->post('nom') ;
			$prenom = $this->input->post('prenom') ;
			$age = $this->input->post('age') ;
			$mail = $this->input->post('mail') ;
			$tel = $this->input->post('tel');
			$annee_scolaire = $this->input->post('annee_scolaire') ;
			$lycee = $this->input->post('lycee');
			$idanimateur = $this->input->post('idanimateur') ;
			
			
			$this->load->model('animateur_model', 'animateurMod');
			$this->animateurMod->modifieranimateur($idanimateur, $nom, $prenom, $age, $mail, $tel, $annee_scolaire, $lycee);
		}
	}
	public function supprimer_animateur($id) {
		$this->load->model('animateur_model', 'animateurMod');
		$this->animateurMod->supprimerAnimateur($id);
		$this->afficher_animateurs() ;
	}
	
	// La fonction qui va s'occuper de générer la vue finale
	public function afficher($vue, $header = array(), $data = array(), $connexion = 0)
	{
		if($connexion == 1)
			$this->load->view($vue, $header);
		else {
			$this->load->view('header', $header) ;
			$this->load->view($vue, $data);
			$this->load->view('footer') ;
		}
	}
}
