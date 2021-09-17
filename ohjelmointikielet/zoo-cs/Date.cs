using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Zoo
{
    class Date
    {
        private int d;
        private int m;
        private int y;

        public int D { get => d; private set => d = value; }
        public int M { get => m; private set => m = value; }
        public int Y { get => y; private set => y = value; }

        public Date(int d = 1, int m = 1, int y = 2000)
        {
            setValues(d, m, y);
        }

        private Boolean setValues(int d, int m, int y)
        {
            int[] longerMonths = { 1, 3, 5, 7, 8, 10, 12 };
            int[] shorterMonths = { 4, 6, 9, 11 };
            if (y > 0)
            {
                if (1 <= m && m <= 12)
                {
                    if (m == 2)
                    {
                        if (checkLeapYear(y))
                        {
                            if (1 <= d && d <= 29)
                            {
                                D = d; M = m; Y = y;
                                return true;
                            }
                        }
                    }
                    else if (longerMonths.Contains(m))
                    {
                        if (1 <= d && d <= 31)
                        {
                            D = d; M = m; Y = y;
                            return true;
                        }
                    }
                    else if (shorterMonths.Contains(m))
                    {
                        if (1 <= d && d <= 30)
                        {
                            D = d; M = m; Y = y;
                            return true;
                        }
                    }
                }
            }
            Console.WriteLine($"Given Date ({d}.{m}.{y}) is not valid! Default was used.");
            D = 1;
            M = 1;
            Y = 2000;
            return false;
        }

        private Boolean checkLeapYear(int y)
        {
            if ((y % 4 == 0) && (y % 100 != 0) || (y % 400 == 0)) {
                return true;
            } else return false;
        }

        public override string ToString() => $"({D}.{M}.{Y})";


        public int compareAges(Date birth)
        {
            int year1 = this.Y;
            int year2 = birth.Y;
            int month1 = this.M;
            int month2 = birth.M;
            int day1 = this.D;
            int day2 = birth.D;

            return year1 < year2 ? -1 : year1 > year2 ? 1 : month1 < month2 ? -1 : month1 > month2 ? 1 : day1 < day2 ? -1 : day1 > day2 ? 1 : 0;
        }
    }
}
