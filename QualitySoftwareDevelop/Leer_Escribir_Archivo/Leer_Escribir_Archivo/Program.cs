using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Leer_Escribir_Archivo
{
    class Program
    {
        static void Main(string[] args)
        {
            Archivo file = new Archivo();
            Console.WriteLine("Nombre del archivo: ");
            file.archivo = Console.ReadLine();
            if(file.ExisteArchivo(file.archivo + ".txt"))
            {
                file.MostrarTextoLeido();
                file.DesplegarMenu();
                if (Console.ReadLine() == "1")
                {
                    file.EditarArchivo();
                }
                else if (Console.ReadLine() == "2")
                {
                    Console.WriteLine("Adios");
                }
                else
                {
                    Console.WriteLine("Favor de escribir opción 1 o 2. El programa se cerrará.");
                }
            }
            Console.ReadKey();
        }
    }
}