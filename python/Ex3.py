def generate_primes(upper_limit):
    primes = []
    for num in range(2, upper_limit + 1):
        is_prime = True
        for i in range(2, int(num ** 0.5) + 1):
            if num % i == 0:
                is_prime = False
                break
        if is_prime:
            primes.append(num)
    return primes

# Example usage:
limit = 20
prime_numbers = generate_primes(limit)
print("Prime numbers up to", limit, "are:", prime_numbers)
