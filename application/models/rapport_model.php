<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rapport_model extends CI_Model
{
	protected $table = 'rapports';
	
	public function getRapport($id) {
		return $this->db->select('*')->from($this->table)->where('id', $id)->get()->result();
	}
	public function getRapports() {
		return $this->db->select('*')->from($this->table)->get()->result() ;
	}
	public function ajouterRapport($texte, $anim, $temps) {
		return $this->db->set('id', '')->set('temps', $temps)->set('texte', $texte)->set('animateur', $anim)->insert($this->table);
	}
	public function modifierRapport($id, $texte, $temps) {
		return $this->db->set('texte', $texte)->set('temps', $temps)->where('id', $id)->update($this->table);
	}
	public function supprimerRapport($id) {
		return $this->db->where('id', $id)->delete($this->table) ;
	}
}