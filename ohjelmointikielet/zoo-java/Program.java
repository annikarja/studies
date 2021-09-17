
package fi.lab.zoo;

/**
 * @author Anni Karja
 */
public class Program {
    public static void main(String[] args) {
        Animal a1 = new Tiger();
        Animal a2 = new Shark();
        Animal a3 = new Shark("Aatu", new Date(5, 3, 1996), 56, "Whale");
        Animal a4 = new Tiger("Heikki", new Date(30, 12, 1960), 30, "Bengali");

        a3.utter();
        a4.move();

        Zoo zoo = new Zoo();
        zoo.add(a1);
        zoo.add(a2);
        zoo.add(a3);
        zoo.add(a4);

        zoo.print();

        Shark a5 = new Shark("Veijo", new Date(29, 2, 2016), 20, "Bull");
        a1.setWeight(70);
        zoo.add(a5);
        zoo.remove("Timppa");

        zoo.printSortedByName();

        Tiger a6 = new Tiger("Otto", new Date(-1, 12, 1978), 110, "Indian");
        zoo.add(a6);
        a3.setName("Lauri");
        a5.setSpecies("Sumatran");

        zoo.printSortedByAge();
    }
}
