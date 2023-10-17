export default {
    data() {
        return {
            name: 'Vishnu',
            birthYear: '2000'
        }
    },
    computed: {
        addAge() {
            return `${this.name} is ${this.calculateAge(this.birthYear)}`;
        }
    },
    methods: {
        calculateAge(yearOfBirth) {
            return new Date().getFullYear() - yearOfBirth;
        },
        setHeadings(heading) {
            return heading.charAt(0).toUpperCase() + heading.slice(1);
        }
    }
}