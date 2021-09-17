
package fi.lab.zoo;

import java.util.*;

/**
 * @author Anni Karja
 */
public class Date {
    private int d;
    private int m;
    private int y;
    
    public Date() {
        this(1, 1, 2000);
    }
    
    public Date(int d, int m, int y){
        setValues(d, m, y);
    }
    
    private Boolean setValues(int d, int m, int y)
    {
        Integer[] longerMonths = { 1, 3, 5, 7, 8, 10, 12 };
        Integer[] shorterMonths = { 4, 6, 9, 11 };
        List<Integer> longer = new ArrayList<>(Arrays.asList(longerMonths));
        List<Integer> shorter = new ArrayList<>(Arrays.asList(shorterMonths));
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
                            this.d = d; this.m = m; this.y = y;
                            return true;
                        }
                    }
                }
                else if (longer.contains(m))
                {
                    if (1 <= d && d <= 31)
                    {
                        this.d = d; this.m = m; this.y = y;
                        return true;
                    }
                }
                else if (shorter.contains(m))
                {
                    if (1 <= d && d <= 30)
                    {
                        this.d = d; this.m = m; this.y = y;
                        return true;
                    }
                }
            }
        }
        System.out.println("Given Date (" + d + "." + m + "." + y + ") is not valid! Default was used.");
        this.d = 1;
        this.m= 1;
        this.y = 2000;
        return false;
    }

    private Boolean checkLeapYear(int y){
        if ((y % 4 == 0) && (y % 100 != 0) || (y % 400 == 0)) {
            return true;
        } else return false;
    }

    public int compareAges(Date birth) {
        int year1 = this.getY();
        int year2 = birth.getY();
        int month1 = this.getM();
        int month2 = birth.getM();
        int day1 = this.getD();
        int day2 = birth.getD();
        
        return year1<year2 ? -1: year1>year2 ? 1 : month1<month2 ? -1 : month1>month2 ? 1 : day1<day2 ? -1 : day1>day2 ? 1 : 0;
    }
    
    public String toString() {
        return "(" + getD() + "." + getM() + "." + getY()+ ")";
    }
    /**
     * @return the d
     */
    public int getD() {
        return d;
    }

    /**
     * @return the m
     */
    public int getM() {
        return m;
    }

    /**
     * @return the y
     */
    public int getY() {
        return y;
    }
}
