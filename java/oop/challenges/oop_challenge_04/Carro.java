package exercicio4;

public class Carro {

    // 1. Atributos (encapsulados)
    private String marca;
    private String modelo;
    private int velocidade;
    private boolean ligado;

    // 2. Construtor
    public Carro(String marca, String modelo) {
        this.marca = marca;
        this.modelo = modelo;
        this.velocidade = 0;
        this.ligado = false;
    }

    // 3. Getters
    public String getMarca() {
        return marca;
    }

    public String getModelo() {
        return modelo;
    }

    public int getVelocidade() {
        return velocidade;
    }

    public boolean isLigado() {
        return ligado;
    }

    // 4. Setters (somente onde faz sentido)
    public void setMarca(String marca) {
        this.marca = marca;
    }

    public void setModelo(String modelo) {
        this.modelo = modelo;
    }

    // ⚠️ Não faz sentido setter livre pra velocidade/ligado (controlado por métodos)

    // 5. Métodos de comportamento

    public void ligar() {
        if (!ligado) {
            ligado = true;
            System.out.println("Carro ligado!");
        }
    }

    public void desligar() {
        if (ligado && velocidade == 0) {
            ligado = false;
            System.out.println("Carro desligado!");
        } else if (velocidade > 0) {
            System.out.println("Não pode desligar em movimento!");
        }
    }

    public void acelerar() {
        if (ligado) {
            velocidade += 10;
            System.out.println("Velocidade atual: " + velocidade);
        } else {
            System.out.println("Carro desligado!");
        }
    }

    public void frear() {
        if (velocidade > 0) {
            velocidade -= 10;
            if (velocidade < 0) {
                velocidade = 0;
            }
        }
        System.out.println("Velocidade atual: " + velocidade);
    }

    public void status() {
        System.out.println("Marca: " + marca);
        System.out.println("Modelo: " + modelo);
        System.out.println("Velocidade: " + velocidade);
        System.out.println("Status: " + (ligado ? "Ligado" : "Desligado"));
        System.out.println();
    }
}