function sum(n1, n2) {
    return n1+n2;
}

describe('Name of the group', () => {
    
    test('adds 2 + 2 to equal 4', () => {
        expect(sum(2, 2)).toBe(4);
    });


    test('adds 1 + 2 to equal 3', () => {
        expect(sum(1, 2)).toBe(3);
    });


    test('adds 1 + 2 to equal 6', () => {
        expect(sum(3, 2)).toBe(5);
    });

});