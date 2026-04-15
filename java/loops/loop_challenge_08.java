package repetição;
import java.util.Scanner;
 
public class exercicio8_repeticao {
    public static void main(String[] args) {
    
        Scanner scanner = new Scanner(System.in);
    
        System.out.print("Informe numero: ");
        float num = scanner.nextFloat();
 
        float menor = num;
        float maior = num;
    
        while(num != 0){       
            if(num < menor){
                menor = num;
            }
            if(num > maior){
                maior = num;
            }
        
            System.out.print("Informe numero: ");
            num = scanner.nextFloat();
        }
 
        float amplitude = maior - menor;
    
        System.out.println("Amplitude: " + amplitude);
    
        scanner.close();
    }
}