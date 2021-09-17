
package fi.lab.zoo;

/**
 * @author Anni Karja
 */
public class Shark extends Animal {
    private String species;
    
    public Shark() {
        this("Timppa", new Date(), 120, "Great White");
    }
    
    public Shark(String name, Date birth, double weight, String species) {
        super(name, birth, weight);
        setSpecies(species);
    }
    
    @Override
    public String toString() {
        return super.toString() + " Species: " + getSpecies();
    }
    @Override
    public void move() {
        System.out.println("Shark " + getName() + " has moved!");
    }
    @Override
    public void utter() {
        System.out.println("Shark " + getName() + " goes brr!");
    }

    /**
     * @return the species
     */
    public String getSpecies() {
        return species;
    }

    /**
     * @param species the species to set
     */
    public void setSpecies(String species) {
        this.species = species;
    }
}
