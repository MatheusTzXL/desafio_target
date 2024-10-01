import java.util.Scanner;

public class principal {
     public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);

        System.out.print("Informe um número: ");
        int numero = sc.nextInt();

        if (pertenceFibonacci(numero)) {
            System.out.println(numero + " pertence à sequência de Fibonacci.");
        } else {
            System.out.println(numero + " não pertence à sequência de Fibonacci.");
        }

        sc.close();
    }

    public static boolean pertenceFibonacci(int numero) {
        int a = 0, b = 1;

        if (numero == 0 || numero == 1) {
            return true;
        }

        while (b < numero) {
            int temp = b;
            b = a + b;
            a = temp;
        }

        return b == numero;
    }
}
