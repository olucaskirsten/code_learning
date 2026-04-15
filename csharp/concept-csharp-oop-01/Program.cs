using System;

public class Livro{
    public string titulo;
    public int ano;
    bool disponivel;

    public void Exibir(){
        Console.WriteLine($"Titulo: {titulo}, Ano: {Preco}, Disponibilidade: {disponivel}");
    }

    public Livro(string NomeDoLivro){
        Nome = NomeDoLivro;
    }

    public Livro(){

    }
}

class Program{
    static void Main(){
        Livro p1; 
        p1 = new Livro("Gulliver");
        p1.ano = 1993;
        p1.disponivel = true;
        p1.Exibir();

        Livro p2; 
        p1 = new Livro("Troia");
        p1.ano = 1750;
        p1.disponivel = false;
        p1.Exibir();
        
    }
    
}class Carro {
    public string Nome;
    public double Nota1;
    public double Nota2;

    public void Exibir() {
        Console.WriteLine(Nome + " - Média: " + CalcularMedia());
    }
}

class Program {
    static void Main() {
        Aluno a1 = new Aluno ("Lucas", 10, 8);

        a1.Exibir();
    }
} 
