using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Potencia_Raiz
{
    class Operaciones
    {
        public static double Potencia(double numero, int potencia)
        {
            double res = numero;
            try
            {
                for (int i = 1; i < potencia; i++)
                {
                    res *= numero;
                }
                Console.WriteLine(res);
            }
            catch (Exception ex)
            {
                Console.WriteLine("Error: " + ex.ToString());
            }
            return res;
        }

        public static double Raiz(double numero, int potencia)
        {
            double rad = numero;
            double tot = 0;
            try
            {
                while (tot != rad)
                {
                    tot = rad;
                    rad = (numero / rad + rad) / potencia;
                }
                Console.Write(rad);
            }
            catch (Exception ex)
            {
                Console.WriteLine("Error: " + ex.ToString());
            }
            return rad;
        }
    }
}