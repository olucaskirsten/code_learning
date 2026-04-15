//package method_aula;
import java.util.Scanner;
 
public class method_ex1 {
   public static void linha (int num, char caracter) {
    for (int i =1; i <= num; i++) {
        System.out.print(caracter);
    }
    System.out.println();
   }
   
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        linha(10, '%');
        System.out.println("Numeros de 1 a 5: ");
        linha(15, '&');

        for (int i = 1; i <= 5; i++) {
            System.out.println(i);
        }

        scanner.close();
    }
}