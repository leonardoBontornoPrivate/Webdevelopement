using System;

namespace C_Sharp_Trainging_Project
{
    class Program
    {

        static void Main(string[] args)
        {

            Console.Title = "Arrays and Lists";

            Console.Write("How many students do you want to have? ");
            int studentsCount = Convert.ToInt32(Console.ReadLine());

            string[] names = new string[studentsCount];

            for(int i = 0; i < names.Length; i++)
            {
                names[i] = Console.ReadLine();
            }

            Console.WriteLine("-------------------------------------");

            Array.Sort(names);

            foreach(string _names in names)
            {
                Console.WriteLine(_names);
            }

            /* 
             * while
             * do-while
             * for
             * foreach
             */

            // Wait for Key to end the program
            Console.ReadKey();
        }
    }
}
