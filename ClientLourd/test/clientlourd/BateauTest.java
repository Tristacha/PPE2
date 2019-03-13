/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package clientlourd;

import junit.framework.TestCase;
import org.junit.Test;
import static org.junit.Assert.*;

/**
 *
 * @author Tristan
 */
public class BateauTest extends TestCase{
    
    public BateauTest(String testName){
        super(testName);
    }

    /**
     * Test of toString method, of class Bateau.
     */
    @Test
    public void testToString() {
        Bateau unBateau = new Bateau("1","Bateau",22.01,11.35);
        String ligne = System.getProperty("line.separator");
        assertSame("Nom du bateau : Bateau\n"+"Longueur : 22.01 mètres\n"+"Largeur : 11.35 mètres", unBateau.toString());
    }
}
