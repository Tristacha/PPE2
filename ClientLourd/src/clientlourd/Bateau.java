/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package clientlourd;

/**
 *
 * @author Tristan
 */
public class Bateau {
    protected String idBateau, nomBat;
    protected double longueurBat, largeurBat;
    public Bateau(String unId, String unNom, double uneLongueur, double uneLargeur) {
	this.idBateau = unId;
	this.nomBat = unNom;
	this.longueurBat = uneLongueur;
	this.largeurBat = uneLargeur;
    }
    public String toString() {
	String ligne = System.getProperty("line.separator");
	return "Nom du bateau : "+this.nomBat+ligne+"Longueur : "+this.longueurBat+" mètres"+ligne+"Largeur : "+this.largeurBat+" mètres";
    }
}
