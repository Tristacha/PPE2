/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package clientlourd;

import java.util.ArrayList;
import junit.framework.TestCase;
import org.junit.Test;
import static org.junit.Assert.*;

/**
 *
 * @author Tristan
 */
public class BateauVoyageurTest extends TestCase{
    
    private ArrayList equipements = new ArrayList();
    private BateauVoyageur unBateauVoyageur = new BateauVoyageur("2","BateauVoyageur",23.44,12,23,"/test/image.png",equipements);
    
    public BateauVoyageurTest(String testName) {
        super(testName);
    }
    
    /**
     * Test of toString method, of class BateauVoyageur.
     */
    @Test
    public void testToString() {
        this.equipements.add("Accès Handicapé");
        this.equipements.add("Bar");
        this.equipements.add("Pont Promenade");
        this.equipements.add("Salon Vidéo");
        assertSame("Nom du bateau : BateauVoyageur\n"+"Longueur : 23.44 mètres\n"+"Largeur : 12.0 mètres\n" +"Vitesse : 23.0 noeuds\n" +"Liste des équipements du bateau :\n" +"- Accès Handicapé\n" +"- Bar\n" +"- Pont Promenade\n" +"- Salon Vidéo", this.unBateauVoyageur.toString());
    }

    /**
     * Test of getImageBatVoy method, of class BateauVoyageur.
     */
    @Test
    public void testGetImageBatVoy() {
        this.equipements.add("Accès Handicapé");
        this.equipements.add("Bar");
        this.equipements.add("Pont Promenade");
        this.equipements.add("Salon Vidéo");
        assertEquals("/test/image.png",this.unBateauVoyageur.getImageBatVoy());
    }
}
