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
                Console.WriteLine("\r\n" + "Texto:");
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
                Console.WriteLine("\r\n" + "---Programa de lectura y escritura de archivos---");
                Console.WriteLine("-- Archivo: nombre del archivo --");
                Console.WriteLine("Seleccione lo que quiere hacer");
                Console.WriteLine("1. Editar");
                Console.WriteLine("2. Salir");
                Console.Write("C:>");
        }

        public void MostrarTextoLeido()
        {
            try
            {
                cadenas = new List<string>();
                cadenas.Add(st.ReadToEnd());
                for (int i = 0; i < cadenas.Count; i++)
                {
                    Console.WriteLine(cadenas[i]);
                }
            }
            catch (Exception ex)
            {
                Console.WriteLine("Error al leer el archivo. " + ex.ToString());
            }
        }

        //public bool EsElFinal()
        //{

        //}

        //public bool EditarArchivo()
        //{

        //}
    }
}