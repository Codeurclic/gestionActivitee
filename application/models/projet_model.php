<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Projet_model extends CI_Model
{
	protected $table = 'projets';
	
	public function getProjet($id) {
		return $this->db->select('*')->from($this->table)->where('id', $id)->get()->result();
	}
	public function getProjets() {
		return $this->db->select('*')->from($this->table)->get()->result() ;
	}
	public function ajouterProjet($titre, $lien, $anim, $temps) {
		return $this->db->set('id', '')->set('temps', $temps)->set('titre', $titre)->set('animateur', $anim)->set('fiche_projet', $lien)->insert($this->table);
	}
	public function modifierProjet($id, $titre, $file, $temps) {
		return $this->db->set('titre', $titre)->set('temps', $temps)->set('lien_fiche', $file)->where('id', $id)->update($this->table);
	}
	public function supprimerProjet($id) {
		return $this->db->where('id', $id)->delete($this->table) ;
	}
	public function getNombre() {
		return $this->db->count_all_results($this->table);
	}
}