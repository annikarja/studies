using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Zoo
{
    class Tiger : Animal
    {
        private string species;

        public string Species { get => species; set => species = value; }

        public Tiger(string name = "Leevi", Date birth = null, double weight = 100, string species = "Siberian")
            : base(name, birth, weight)
        {
            Species = species;
        }
        public override void move()
        {
            Console.WriteLine($"Tiger {Name} has moved!");
        }

        public override void utter()
        {
            Console.WriteLine($"Tiger {Name} goes grr!");
        }

        public override string ToString()
        {
            return $"{base.ToString()} Species: {Species}";
        }

    }
}
