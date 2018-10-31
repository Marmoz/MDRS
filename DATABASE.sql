#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: Etudiant
#------------------------------------------------------------

CREATE TABLE Etudiant(
        idStudent        Int NOT NULL AUTO_INCREMENT  ,
        prenomStudent    Varchar (100) NOT NULL ,
        nomStudent       Varchar (100) NOT NULL ,
        emailStudent     Varchar (100) NOT NULL ,
        naissanceStudent Date NOT NULL ,
        user_id          Int NOT NULL
	,CONSTRAINT Etudiant_PK PRIMARY KEY (idStudent)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Matiere
#------------------------------------------------------------

CREATE TABLE Matiere(
        idMatiere  Int NOT NULL  AUTO_INCREMENT ,
        nomMatiere Varchar (100) NOT NULL
	,CONSTRAINT Matiere_PK PRIMARY KEY (idMatiere)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: anneescolaire
#------------------------------------------------------------

CREATE TABLE anneescolaire(
        annee Int NOT NULL
	,CONSTRAINT anneescolaire_PK PRIMARY KEY (annee)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Enseignant
#------------------------------------------------------------

CREATE TABLE Enseignant(
        idTeacher        Int NOT NULL AUTO_INCREMENT  ,
        prenomTeacher    Varchar (100) NOT NULL ,
        nomTeacher       Varchar (100) NOT NULL ,
        emailTeacher     Varchar (100) NOT NULL ,
        naissanceTeacher Date NOT NULL ,
        user_id          Int NOT NULL
	,CONSTRAINT Enseignant_PK PRIMARY KEY (idTeacher)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Filiere
#------------------------------------------------------------

CREATE TABLE Filiere(
        idFiliere  Int NOT NULL  AUTO_INCREMENT ,
        nomFiliere Varchar (100) NOT NULL
	,CONSTRAINT Filiere_PK PRIMARY KEY (idFiliere)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Administrateur
#------------------------------------------------------------

CREATE TABLE Administrateur(
        idAdministrator     Int NOT NULL AUTO_INCREMENT ,
        prenomAdministrator Varchar (100) NOT NULL ,
        nomAdministrator    Varchar (100) NOT NULL ,
        emailAdministrator  Varchar (100) NOT NULL ,
        user_id             Int NOT NULL ,
        fonctionAdmin       Varchar (100) NOT NULL
	,CONSTRAINT Administrateur_PK PRIMARY KEY (idAdministrator)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Inscrit
#------------------------------------------------------------

CREATE TABLE Inscrit(
        idStudent      Int NOT NULL ,
        idFiliere      Int NOT NULL ,
        annee          Int NOT NULL ,
        numInscription Int NOT NULL
	,CONSTRAINT Inscrit_PK PRIMARY KEY (idStudent,idFiliere,annee)

	,CONSTRAINT Inscrit_Etudiant_FK FOREIGN KEY (idStudent) REFERENCES Etudiant(idStudent)
	,CONSTRAINT Inscrit_Filiere0_FK FOREIGN KEY (idFiliere) REFERENCES Filiere(idFiliere)
	,CONSTRAINT Inscrit_anneescolaire1_FK FOREIGN KEY (annee) REFERENCES anneescolaire(annee)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Notedby
#------------------------------------------------------------

CREATE TABLE Notedby(
        idTeacher Int NOT NULL ,
        idMatiere Int NOT NULL ,
        idStudent Int NOT NULL ,
        annee     Int NOT NULL ,
        idFiliere Int NOT NULL ,
        note_S1   Int NOT NULL ,
        note_S2   Int NOT NULL ,
        note_Oral Int NOT NULL
	,CONSTRAINT Notedby_PK PRIMARY KEY (idTeacher,idMatiere,idStudent,annee,idFiliere)

	,CONSTRAINT Notedby_Enseignant_FK FOREIGN KEY (idTeacher) REFERENCES Enseignant(idTeacher)
	,CONSTRAINT Notedby_Matiere0_FK FOREIGN KEY (idMatiere) REFERENCES Matiere(idMatiere)
	,CONSTRAINT Notedby_Etudiant1_FK FOREIGN KEY (idStudent) REFERENCES Etudiant(idStudent)
	,CONSTRAINT Notedby_anneescolaire2_FK FOREIGN KEY (annee) REFERENCES anneescolaire(annee)
	,CONSTRAINT Notedby_Filiere3_FK FOREIGN KEY (idFiliere) REFERENCES Filiere(idFiliere)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Comporte
#------------------------------------------------------------

CREATE TABLE Comporte(
        idMatiere Int NOT NULL ,
        idFiliere Int NOT NULL ,
        coeff     Int NOT NULL
	,CONSTRAINT Comporte_PK PRIMARY KEY (idMatiere,idFiliere)

	,CONSTRAINT Comporte_Matiere_FK FOREIGN KEY (idMatiere) REFERENCES Matiere(idMatiere)
	,CONSTRAINT Comporte_Filiere0_FK FOREIGN KEY (idFiliere) REFERENCES Filiere(idFiliere)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: teach
#------------------------------------------------------------

CREATE TABLE teach(
        idTeacher Int NOT NULL ,
        idMatiere Int NOT NULL ,
        annee     Int NOT NULL ,
        idFiliere Int NOT NULL ,
        nb_heures Int NOT NULL
	,CONSTRAINT teach_PK PRIMARY KEY (idTeacher,idMatiere,annee,idFiliere)

	,CONSTRAINT teach_Enseignant_FK FOREIGN KEY (idTeacher) REFERENCES Enseignant(idTeacher)
	,CONSTRAINT teach_Matiere0_FK FOREIGN KEY (idMatiere) REFERENCES Matiere(idMatiere)
	,CONSTRAINT teach_anneescolaire1_FK FOREIGN KEY (annee) REFERENCES anneescolaire(annee)
	,CONSTRAINT teach_Filiere2_FK FOREIGN KEY (idFiliere) REFERENCES Filiere(idFiliere)
)ENGINE=InnoDB;

