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
            if (String.IsNullOrEmpty(Console.ReadLine()) || String.IsNullOrWhiteSpace(Console.ReadLine()))
            {
                Console.WriteLine("El campo está vacío.");
            }
            else if (!RegularExpresions.numeros(Console.ReadLine()))
            {
                Console.WriteLine("No introducir números");
            }
            else
            {
                numero = Convert.ToDouble(Console.ReadLine());
            }
            Console.Write("Ingresa la potencia: ");
            if (String.IsNullOrEmpty(Console.ReadLine()) || String.IsNullOrWhiteSpace(Console.ReadLine()))
            {
                Console.WriteLine("El campo está vacío.");
            }
            else
            {
                exp = Convert.ToInt16(Console.ReadLine());
            }
            Operaciones.Potencia(numero, exp);
            Console.Write("Ingresa un número para calcular la raíz: ");
            if (String.IsNullOrEmpty(Console.ReadLine()) || String.IsNullOrWhiteSpace(Console.ReadLine()))
            {
                Console.WriteLine("El campo está vacío.");
            }
            else
            {
                numero1 = Convert.ToInt16(Console.ReadLine());
            }
            Console.Write("Ingresa la raíz que desea calcular: ");
            if (String.IsNullOrEmpty(Console.ReadLine()) || String.IsNullOrWhiteSpace(Console.ReadLine()))
            {
                Console.WriteLine("El campo está vacío.");
            }
            else
            {
                exp = Convert.ToInt16(Console.ReadLine());
            }
            Operaciones.Raiz(numero1, exp);
            Console.ReadKey();
        }
    }
}