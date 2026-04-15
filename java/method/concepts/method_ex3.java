//package method_aula;
import java.util.*;
 
public class method_ex3 {
   public static int soma (int num1, int num2) {
    return num1 + num2;
}

public static int soma (int num1, int num2, int num3) {
    return num1 + num2 + num3;
}

public static void main(String[] args) {
        System.out.println(soma(5, 12));
        System.out.println(soma(5, 12, 5));
    }
}