using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Potencia_Raiz
{
    class Program
    {
        static void Main(string[] args)
        {
            double numero = 0;
            int numero1 = 0;
            int exp = 0;
            Console.Write("Ingrese un número: ");
            numero = Convert.ToDouble(Console.ReadLine());
            Console.Write("Ingresa la potencia: ");
            exp = Convert.ToInt16(Console.ReadLine());
            Operaciones.Potencia(numero, exp);
            Console.Write("Ingresa un número para calcular la raíz: ");
            numero1 = Convert.ToInt16(Console.ReadLine());
            Console.Write("Ingresa la raíz que desea calcular: ");
            exp = Convert.ToInt16(Console.ReadLine());
            Operaciones.Raiz(numero1, exp);
            Console.ReadKey();
        }
    }
}