using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.IO;

namespace Leer_Escribir_Archivo
{
    class Archivo
    {
        public String archivo;
        List<String> cadenas;
        StreamReader st;

        public bool ExisteArchivo(String arch)
        {
            bool flag = false;
            try
            {
                st = new StreamReader(arch);
                flag = true;
            }
            catch (IOException Ioex)
            {
                Console.WriteLine("No se encontró el archivo.");
            }
            catch (Exception ex)
            {
                Console.WriteLine("Error: " + ex.ToString());
            }
            return flag;
        }

        public void DesplegarMenu()
        {
            Console.WriteLine("---Programa de lectura y escritura de archivos---");
            Console.WriteLine("-- Archivo: nombre del archivo --");
            Console.WriteLine("Seleccione lo que quiere hacer");
            Console.WriteLine("1. Editar");
            Console.WriteLine("2. Salir");
            Console.WriteLine("C:>");
        }

        public void MostrarTextoLeido()
        {
            for (int i = 0; i < File.; i++)
            {

            }
            cadenas = File.ReadAllText(archivo).li
        }

        //public bool EsElFinal()
        //{

        //}

        //public bool EditarArchivo()
        //{

        //}
    }
}