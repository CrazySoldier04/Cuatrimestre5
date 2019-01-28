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
            return (cantidad * 0.16);
        }

        /// <summary>
        /// Método para calcular el IVA en la frontera de México.
        /// </summary>
        /// <param name="cantidad">Monto que se va a calcular el IVA.</param>
        /// <returns>Regresa el IVA calculado del monto ingresado.</returns>
        public static double IVAFrontera (double cantidad)
        {
            return (cantidad * 0.08);
        }

        public static double ValidarDouble(String cantidad)
        {
            double cantDouble;
            if(double.TryParse(cantidad, out cantDouble))
            {
                return cantDouble;
            }
            else
            {
                return -1;
            }
        }
    }
}