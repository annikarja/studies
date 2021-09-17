using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Zoo
{
    abstract class Animal : IComparable<Animal>
    {
        private string name;
        private Date birth;
        private double weight;

        public string Name { get => name; set => name = value; }
        public Date Birth { get => birth; set => birth = value; }
        public double Weight { get => weight; set => weight = value; }

        public Animal(string name = "Animal", Date birth = null, double weight = 100) {
            Name = name;
            Birth = birth ?? new Date();
            Weight = weight;
        }

        public abstract void move();

        public abstract void utter();

        public override string ToString() => $"Name: {Name} Birthday: {Birth} Weight: {Weight}";

        public int CompareTo(Animal a)
        {
            return this.Name.CompareTo(a.Name);
        }
    }
}
