
package fi.lab.zoo;

/**
 * @author Anni Karja
 */
public class Tiger extends Animal {
    private String species;
    
    public Tiger() {
        this("Leevi", new Date(), 100, "Siberian");
    }
    
    public Tiger(String name, Date birth, double weight, String species) {
        super(name, birth, weight);
        setSpecies(species);
    }
    @Override
    public String toString() {
        return super.toString() + " Species: " + getSpecies();
    }
    @Override
    public void move() {
        System.out.println("Tiger " + getName() + " has moved!");
    }
    @Override
    public void utter() {
        System.out.println("Tiger " + getName() + " goes grr!");
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
