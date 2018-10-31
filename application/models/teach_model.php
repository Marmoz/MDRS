<?php
class Teach_model extends MY_Model {
   
      public function give_all()
        {
          $query = $this->db->query("SELECT * FROM teach;");
          return $query->result_array();
                }

        public function givemeall()
        {
    $this->db->select('Enseignant.nomTeacher, Enseignant.prenomTeacher,teach.idTeacher , teach.idFiliere, 
teach.idMatiere, Matiere.nomMatiere, teach.nb_heures, teach.annee, Filiere.nomFiliere');
$this->db->from('teach');
$this->db->join('Enseignant', 'teach.idTeacher = Enseignant.idTeacher');
$this->db->join('Filiere', 'teach.idFiliere = Filiere.idFiliere');
$this->db->join('Matiere', 'teach.idMatiere = Matiere.idMatiere');

$query = $this->db->get();
                  return $query->result_array();
        }

    
    
    
    	public function create($unedata) {
		return $this->db->insert('teach', $unedata);
	}
    
        
            public function deleteTeach($idTeacher,$idMatiere, $annee,$idFiliere) {
        
                    // Supprimer les notes
        return $this->db->delete('teach', array(
                                          'idTeacher' => $idTeacher,
                                          'idMatiere' => $idMatiere,
                                          'annee' => $annee,
                                          'idFiliere' => $idFiliere,
                                        ));
        
  }
    
      public function update($idTeacher,$idMatiere, $annee,$idFiliere, $unedata) { 
              
             return $this->db->update('teach', $unedata, array( 'idFiliere' => $idFiliere,
                                          'idTeacher' => $idTeacher,
                                          'idMatiere' => $idMatiere,
                                          'annee' => $annee,));   
            }



















    
                      public function get_all()
        {
    $this->db->select('Filiere.nomFiliere, Matiere.nomMatiere, comporte.coeff, Filiere.idFiliere, Matiere.idMatiere');
$this->db->from('comporte');
//      $this->db->group_by("Filiere.nomFiliere"); 

// $this->db->where(array('notedby.idStudent' => $idStud));
$this->db->join('Filiere', 'Filiere.idFiliere = comporte.idFiliere');
$this->db->join('Matiere', 'Matiere.idMatiere = comporte.idMatiere');
$this->db->order_by('Filiere.nomFiliere', 'DESC');
                          
$query = $this->db->get();
                  return $query->result_array();
                }
    
        
                      public function get_comporte4()
        {
    $this->db->select('Filiere.idFiliere, Filiere.nomFiliere, Matiere.idMatiere, Matiere.nomMatiere, comporte.coeff');
$this->db->from('Filiere');
$this->db->join('comporte', 'Filiere.idFiliere = comporte.idFiliere');
$this->db->join('Matiere', 'Matiere.idMatiere = comporte.idMatiere');
                          
$query = $this->db->get();
                  return $query->result_array();
                }



   

}
?>