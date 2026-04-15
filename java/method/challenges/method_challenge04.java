//package method_aula;
import java.util.*;
 
public class mtd_exercicio4 {
   public static int multiplicar (int num1, int num2) {
    return num1 * num2;
}

public static int multiplicar (int num1, int num2, int num3) {
    return num1 * num2 * num3;
}

public static void main(String[] args) {
        System.out.println(multiplicar(5, 2));
        System.out.println(multiplicar(5, 2, 5));
    }
}