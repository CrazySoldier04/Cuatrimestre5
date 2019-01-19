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

        /// <summary>
        /// Valida si el archivo ingresado existe.
        /// </summary>
        /// <param name="arch">Especifica el nombre del archivo.</param>
        /// <returns>Verdadero si encuentra el archivo, Falso si no existe el archivo.</returns>
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
                int cont = 0;
                String texto;
                cadenas = new List<string>();
                while ((texto = st.ReadLine()) != null)
                {
                    cadenas.Add(texto);
                    cont++;
                }
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

        public bool EditarArchivo()
        {
            bool res = false;
            StreamWriter sw = new StreamWriter(archivo + ".txt");
            try
            {
                String texto;
                List<String> lista = new List<string>();
                Console.Write("Introducir texto: ");
                texto = Console.ReadLine();
                foreach (String tex in texto.Split('X', 'x'))
                {
                    if (!String.IsNullOrEmpty(tex))
                    {
                        cadenas.Add(tex);
                    }
                }
                for (int i = 0; i < cadenas.Count; i++)
                {
                    sw.WriteLine(cadenas[i]);
                }
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
            finally
            {
                sw.Close();
            }
            return res;
        }
    }
}