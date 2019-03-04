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
public class ClientLourd {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        Bateau unBateau = new Bateau("1","Bateau",22.01,11.35);
        System.out.println(unBateau.toString());
        System.out.println();
        ArrayList equipements = new ArrayList();
        equipements.add("Accès Handicapé");
        equipements.add("Bar");
        equipements.add("Pont Promenade");
        equipements.add("Salon Vidéo");
        BateauVoyageur unBateauVoyageur = new BateauVoyageur("2","BateauVoyageur",23.44,12,23,"/test/image.png",equipements);
        System.out.println(unBateauVoyageur.toString());
    }
}
