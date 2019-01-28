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
            bool isDouble = double.TryParse(Console.ReadLine(), out numero); //numero = Convert.ToDouble(Console.ReadLine());
            if (!isDouble)
            {
                Console.WriteLine("Tipo de dato incorrecto.");
            }
            else
            {
                Console.Write("Ingresa la potencia: ");
                bool isInt = Int32.TryParse(Console.ReadLine(), out exp); //exp = Convert.ToInt16(Console.ReadLine());
                if (!isInt)
                {
                    Console.WriteLine("Tipo de dato incorrecto.");
                }
                else
                {
                    Operaciones.Potencia(numero, exp);
                }
            }
            Console.Write("Ingresa un número para calcular la raíz: ");
            bool esEntero = Int32.TryParse(Console.ReadLine(), out numero1); //numero1 = Convert.ToInt16(Console.ReadLine());
            if (!esEntero)
            {
                Console.WriteLine("Tipo de dato incorrecto.");
            }
            else
            {
                Console.Write("Ingresa la raíz que desea calcular: ");
                bool isInt = Int32.TryParse(Console.ReadLine(), out exp); //exp = Convert.ToInt16(Console.ReadLine());
                if (!isInt)
                {
                    Console.WriteLine("Tipo de dato incorrecto.");
                }
                else
                {
                    Operaciones.Raiz(numero1, exp);
                }
            }
            Console.ReadKey();
        }
    }
}