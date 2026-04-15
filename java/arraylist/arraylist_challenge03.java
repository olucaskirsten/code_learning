import java.util.Scanner;
import java.util.ArrayList;
 
public class arraylist_exercicio03 {
    public static void main(String[] args) {
        
        Scanner scanner = new Scanner(System.in);
        
        ArrayList<Float> operacoes = new ArrayList<>();
        
        float saldo_inicial, operacao, creditos = 0, debitos = 0, cpmf, saldo_final;
        
        System.out.print("Saldo inicial: ");
        saldo_inicial = scanner.nextFloat();
        
        System.out.print("Operacao: ");
        operacao = scanner.nextFloat();
        
        /* Alimeta a lista de operacoes */
        while(operacao != 0){
            operacoes.add(operacao);
            
            System.out.print("Operacao: ");
            operacao = scanner.nextFloat();
        }
        
        /* Calcula o total de creditos e debitos */
        for(float elemento : operacoes){
            if(elemento > 0){
                creditos += elemento;
            }
            if (elemento < 0){
                debitos += elemento;
            }
        }
        
        /* Calcula os resultados */
        debitos = debitos * -1;
        cpmf = debitos * 0.004f;
        saldo_final = saldo_inicial + creditos - debitos - cpmf;
        
        /* Apresenta os resultados */
        System.out.printf("------------------------\n");
        System.out.printf("Creditos.....: R$ %.2f\n", creditos);
        System.out.printf("Debitos......: R$ %.2f\n", debitos);
        System.out.printf("C.P.M.F......: R$ %.2f\n", cpmf);
        System.out.printf("Saldo........: R$ %.2f\n", saldo_final);
        System.out.printf("------------------------\n");
        
        scanner.close();
    }
}