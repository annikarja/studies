
package fi.lab.zoo;

/**
 * @author Anni Karja
 */
public abstract class Animal implements Comparable<Animal>{
    private String name;
    private Date birth;
    private double weight;
    
    public Animal() {
        this("Pekka", new Date(), 100);
    }
    
    public Animal(String name, Date birth, double weight) {
        setName(name);
        setBirth(birth);
        setWeight(weight);
    }
    
    
    @Override
    public int compareTo(Animal a) {
        return this.name.compareTo(a.name);
    }
    
    @Override
    public String toString() {
        return "Name: " + getName()+" Birthday: "+getBirth() + " Weight: " + getWeight();
    }
    
    public abstract void move();
    
    public abstract void utter();
    
    /**
     * @return the name
     */
    public String getName() {
        return name;
    }

    /**
     * @param name the name to set
     */
    public void setName(String name) {
        this.name = name;
    }

    /**
     * @return the birth
     */
    public Date getBirth() {
        return birth;
    }

    /**
     * @param birth the birth to set
     */
    public void setBirth(Date birth) {
        this.birth = birth;
    }

    /**
     * @return the weight
     */
    public double getWeight() {
        return weight;
    }

    /**
     * @param weight the weight to set
     */
    public void setWeight(double weight) {
        this.weight = weight;
    }
}
