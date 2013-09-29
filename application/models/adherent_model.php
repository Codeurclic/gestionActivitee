<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Adherent_model extends CI_Model
{
	protected $table = 'adherents';
	
	public function getAdherent($id) {
		return $this->db->select('*')->from($this->table)->where('id', $id)->get()->result();
	}
	public function getAdherents() {
		return $this->db->select('*')->from($this->table)->get()->result() ;
	}
	public function ajouterAdherent($nom, $prenom, $age, $mail, $tel, $annee_scolaire, $lycee, $temps) {
		return $this->db->set('id', '')->set('nom', $nom)->set('prenom', $prenom)->set('age', $age)->set('mail', $mail)->set('tel', $tel)->set('annee_scolaire', $annee_scolaire)->set('lycee', $lycee)->set('inscris', $temps)->insert($this->table);
	}
	public function modifierAdherent($idadherent, $nom, $prenom, $age, $mail, $tel, $annee_scolaire, $lycee) {
		return $this->db->set('nom', $nom)->set('prenom', $prenom)->set('age', $age)->set('mail', $mail)->set('tel', $tel)->set('annee_scolaire', $annee_scolaire)->set('lycee', $lycee)->where('id', $idadherent)->update($this->table);
	}
	public function supprimerAdherent($id) {
		return $this->db->where('id', $id)->delete($this->table) ;
	}
	public function getNombre() {
		return $this->db->count_all_results($this->table);
	}
	public function getMoyenneAge() {
		$query = "SELECT AVG(age) AS moyenne_age FROM adherents";
		return $this->db->query($query)->result() ;
	}
}