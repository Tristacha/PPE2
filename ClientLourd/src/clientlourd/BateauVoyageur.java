/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package clientlourd;

import java.util.ArrayList;

/**
 *
 * @author Tristan
 */
public class BateauVoyageur extends Bateau{
    private double vitesseBatMoy;
    private String imageBatVoy;
    //Retirer le commentaire pour que l'array corresponde a l'objet Equipement
    private ArrayList /*<Equipement>*/ lesEquipements;
    public BateauVoyageur(String unId, String unNom, double uneLongueur, double uneLargeur, double uneVitesse, String uneImage, ArrayList uneCollEquip) {
        super(unId, unNom, uneLongueur, uneLargeur);
        this.vitesseBatMoy = uneVitesse;
        this.imageBatVoy = uneImage;
        this.lesEquipements = uneCollEquip;
    }
    @Override
    public String toString(){
        String ligne = System.getProperty("line.separator");
        String res = super.toString()+ligne+"Vitesse : "+this.vitesseBatMoy+" noeuds"+ligne+"Liste des équipements du bateau :"+ligne;
        //Remplacer Object obj par Equipement unEquipement quand la classe sera faite
        for(Object obj : lesEquipements){
            res += "- "+obj.toString()+ligne;
        }
	return res;
    }
    public String getImageBatVoy(){
        return this.imageBatVoy;
    }
}
