using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Calculo_IVA
{
    class Program
    {
        static void Main(string[] args)
        {
            double num = 0;
            bool val;
            Console.WriteLine("Cálculo del IVA 16% en el estado de la república mexicana: ");
            val = double.TryParse(Console.ReadLine(), out num);
            if (!val)
            {
                Console.WriteLine("Tipo de dato incorrecto.");
            }
            else
            {
                Calculo.IVAMexico(num);
            }
            Console.WriteLine("Cálculo del IVA 8% en el estado de la república mexicana: ");
            val = double.TryParse(Console.ReadLine(), out num);
            if (!val)
            {
                Console.WriteLine("Tipo de dato incorrecto.");
            }
            else
            {
                Calculo.IVAFrontera(num);
            }
            Console.ReadKey();
        }
    }
}