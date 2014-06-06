<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Animateur_model extends CI_Model
{
	protected $table = 'animateurs';
	
	public function getAnimateur($id) {
		return $this->db->select('*')->from($this->table)->where('id', $id)->get()->result();
	}
	public function getAnimateurs() {
		return $this->db->select('*')->from($this->table)->get()->result() ;
	}
	public function getAnimateurByMail($mail) {
		return $this->db->select('*')->from($this->table)->where('mail', $mail)->get()->result() ;
	}
	public function ajouterAnimateur($identifiant, $mdp, $nom, $prenom, $age, $mail, $tel, $admin, $temps) {
		return $this->db->set('id', '')->set('mdp', $mdp)->set('nom', $nom)->set('prenom', $prenom)->set('age', $age)->set('mail', $mail)->set('tel', $tel)->set('inscris', $temps)->set('admin', $admin)->set('identifiant', $identifiant)->insert($this->table);
	}
	public function modifierAnimateur($idAnimateur, $nom, $prenom, $age, $mail, $tel, $annee_scolaire, $lycee) {
		return $this->db->set('nom', $nom)->set('prenom', $prenom)->set('age', $age)->set('mail', $mail)->set('tel', $tel)->set('annee_scolaire', $annee_scolaire)->set('lycee', $lycee)->where('id', $idAnimateur)->update($this->table);
	}
	public function supprimerAnimateur($id) {
		return $this->db->where('id', $id)->delete($this->table) ;
	}
}