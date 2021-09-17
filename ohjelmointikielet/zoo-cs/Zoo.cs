using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Zoo
{
    class Zoo
    {
        private Dictionary<string, Animal> animalsDict = new();

        public Animal add(Animal a)
        {
            Animal temp = null;
            string name = a.Name;
            if (animalsDict.ContainsKey(name))
            {
                temp = animalsDict[name];
            }

            animalsDict[name] = a;
            return temp; 
        }

        public void remove(string name)
        {
            animalsDict.Remove(name);
        }


        public void print()
        {
            Console.WriteLine("---- Animals in Container ----");
            foreach (var item in animalsDict) Console.WriteLine($"KEY: {item.Key} \t VALUE: {item.Value}");
        }

        public void printSortedByName()
        {
            List<String> helper = new();
            foreach (var item in animalsDict) helper.Add(item.Key);
            helper.Sort();
            Console.WriteLine("---- Animals Sorted by Name");
            foreach (var item in helper)
            {
                Console.WriteLine($"KEY: {item} \t VALUE: {animalsDict[item]}");
            }
        }

        public void printSortedByAge()
        {
            List<Animal> helper = new();
            foreach (var item in animalsDict) helper.Add(item.Value);
            helper.Sort(delegate (Animal a1, Animal a2)
            {
                 return a1.Birth.compareAges(a2.Birth);
            });
            Console.WriteLine("---- Animals Sorted by Age ----");
            foreach (var item in helper)
            {
                Console.WriteLine($"{item.Name}");
            }
        }
    }
}
