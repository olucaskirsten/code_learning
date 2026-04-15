package condicionais;
import java.util.Scanner;

class Main {
  public static void main(String[] args) {
    Scanner scanner = new Scanner(System.in);

    System.out.println("Digite o 1o numero: ");
    int numero1 = scanner.nextInt();

    System.out.println("Digite o 2o numero: ");
    int numero2 = scanner.nextInt();

    System.out.println("----------------------");

    if (numero1 > numero2){
        System.out.println(numero2);
        System.out.println(numero1);
    }
    else {
        System.out.println(numero1);
        System.out.println(numero2);
    }
        
    scanner.close();
  }
}
