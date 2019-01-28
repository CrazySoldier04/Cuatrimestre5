using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Calculo_IVA
{
    class Calculo
    {
        /// <summary>
        /// Método para calcular el IVA en país de méxico que no sea zona fronteriza.
        /// </summary>
        /// <param name="cantidad">Monto que se va a calcular el IVA.</param>
        /// <returns>Regresa el IVA calculado del monto ingresado.</returns>
        public static double IVAMexico (double cantidad)
        {
            Console.WriteLine("El IVA es: " + cantidad * 0.16);
            return (cantidad * 0.16);
        }

        /// <summary>
        /// Método para calcular el IVA en la frontera de México.
        /// </summary>
        /// <param name="cantidad">Monto que se va a calcular el IVA.</param>
        /// <returns>Regresa el IVA calculado del monto ingresado.</returns>
        public static double IVAFrontera (double cantidad)
        {
            Console.WriteLine("El IVA es: " + cantidad * 0.08);
            return (cantidad * 0.08);
        }
    }
}