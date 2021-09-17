using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Zoo
{
    class Shark : Animal
    {
        private string species;

        public string Species { get => species; set => species = value; }

        public Shark(string name = "Timppa", Date birth = null, double weight = 120, string species = "Great White")
            : base(name, birth, weight)
        {
            Species = species;
        }

        public override void move()
        {
            Console.WriteLine($"Shark {Name} has moved!");
        }

        public override void utter()
        {
            Console.WriteLine($"Shark {Name} goes brr!");
        }

        public override string ToString()
        {
            return $"{base.ToString()} Species: {Species}";
        }
    }
}
