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

        /// <summary>
        /// Shows the file menú.
        /// </summary>
        public void DesplegarMenu()
        {
                Console.WriteLine("\r\n" + "---Programa de lectura y escritura de archivos---");
                Console.WriteLine("-- Archivo: nombre del archivo --");
                Console.WriteLine("Seleccione lo que quiere hacer");
                Console.WriteLine("1. Editar");
                Console.WriteLine("2. Salir");
                Console.Write("C:>");
        }

        /// <summary>
        /// Shows the file text.
        /// </summary>
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
            finally
            {
                st.Close();
            }
        }

        public bool EsElFinal()
        {
            bool res = false;
            try
            {

            }
            catch (IOException ioex)
            {
                Console.WriteLine("Error al finalizar la cadena: " + ioex.StackTrace.ToLower());
            }
            catch (Exception ex)
            {
                Console.WriteLine("Error: " + ex.ToString());
            }
            return res;
        }

        public bool EditarArchivo()
        {
            bool res = false;
            try
            {
                String texto;
                Console.Write("Introducir texto: ");
                texto = Console.ReadLine();
                StreamWriter sw = new StreamWriter(archivo + ".txt");
                for (int i = 0; i < cadenas.Count; i++)
                {
                    sw.WriteLine(cadenas[i] + texto);
                }
                sw.Close();
                res = true;
            }
            catch (IOException ioex)
            {
                Console.WriteLine("Error al editar el archivo: " + ioex.ToString());
            }
            catch (Exception ex)
            {
                Console.WriteLine("Error: " + ex.StackTrace.ToString());
            }
            return res;
        }
    }
}