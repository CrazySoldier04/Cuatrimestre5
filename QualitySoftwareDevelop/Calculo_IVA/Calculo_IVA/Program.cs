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
            Console.WriteLine("Cálculo del IVA 16% en el estado de la república mexicana: ");
            double cant = Calculo.ValidarDouble("cloro");
            Calculo.IVAMexico(Convert.ToDouble(Console.ReadLine()));
            Console.WriteLine("Cálculo del IVA 8% en el estado de la república mexicana: ");
            Calculo.IVAFrontera(Convert.ToDouble(Console.ReadLine()));
            Console.ReadKey();
        }
    }
}