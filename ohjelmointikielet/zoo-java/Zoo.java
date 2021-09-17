
package fi.lab.zoo;

import java.util.*;

/**
 * @author Anni Karja
 */
public class Zoo {
    private Map<String, Animal> animalsMap = new HashMap<>();
    
    public Animal add(Animal a) {
        Animal temp = null;
        String name = a.getName();
        if(animalsMap.containsKey(name)) temp = animalsMap.get(name);
        animalsMap.put(name, a);
        return temp; 
    }
    
   public void remove(String name) {
       animalsMap.remove(name);
   }
   
   public void print() {
       System.out.println("---- Animals in Container ----");
       animalsMap.forEach((k,v) -> System.out.println("KEY: " + k + "\t VALUE: "+ v));
   }
   
   public void printSortedByName(){
       List<String> helper = new ArrayList<>();
       animalsMap.forEach((k, v) -> helper.add(k));
       Collections.sort(helper);
       System.out.println("---- Animals Sorted by Name ----");
       helper.forEach((e) -> System.out.println("KEY: " + e + "\t VALUE: " + animalsMap.get(e)));
   }
   
   public void printSortedByAge(){
       List<Animal> helper = new ArrayList<>();
       animalsMap.forEach((k, v) -> helper.add(v));
       helper.sort((Animal a1, Animal a2) -> a1.getBirth().compareAges(a2.getBirth()));
       System.out.println("---- Animals Sorted by Age ----");
       helper.forEach((e) -> System.out.println(e.getName()));
       }   
   }

