import java.util.Scanner;
import java.util.ArrayList;
import java.util.Collections;

public class arraylist_exercicio01 {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        ArrayList<String> nomes = new ArrayList<>();

        // atividade 01

        nomes.add("Carlos");
        nomes.add("Bruno");
        nomes.add("Ana");
        nomes.add("Fernando");
        nomes.add("Diego");
        
        System.out.println(nomes);
        
        nomes.add("Helena");
        nomes.add(0, "Gustavo");

        System.out.println(nomes);

        if (nomes.contains("Fernando")) {
            System.out.println("Fernando está na lista!");
        } else {
            System.out.println("Não está na lista!");
        }

        nomes.remove("Ana");
        System.out.println(nomes);

        Collections.sort(nomes);
        System.out.println(nomes);

        nomes.clear();
        System.out.println(nomes);
    }
}