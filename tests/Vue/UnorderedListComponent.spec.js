import { mount } from '@vue/test-utils';
import UnorderedListComponent from '../../resources/js/components/UnorderedListComponent.vue';


describe('UnorderedListComponent.vue', () => {
    it('counts "three" (green)', () => {
        const wrapper = mount(UnorderedListComponent);

        expect(wrapper.findAll('.greenify').length).toBe(34)
    })

    it('counts "five" (orange)', () => {
        const wrapper = mount(UnorderedListComponent);

        expect(wrapper.findAll('.orangify').length).toBe(6)
    })

    it('counts "three and five" (red)', () => {
        const wrapper = mount(UnorderedListComponent);

        expect(wrapper.findAll('.redify').length).toBe(6)
    })
})