//package method_aula;
import java.util.*;
 
public class mtd_exercicio5{

   public static boolean resto(int num) {
    return num % 2 == 0;
}

public static void main(String[] args) {
    Scanner scanner = new Scanner(System.in);
    System.out.println("Digite um numero: ");
    int num = scanner.nextInt();

    if (resto(num)) {
        System.out.println(num + "é par");
    } else {
        System.out.println(num + " não é par");
    }
    
    scanner.close();
}
}