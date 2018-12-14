$.fn.select2.amd.define('select2/custom/dropdown-adapter/select-all', [
    'select2/utils',
    'select2/dropdown',
    'select2/dropdown/attachBody'
], function (Utils, Dropdown, AttachBody) {
    function SelectAll() {
    }

    SelectAll.prototype.render = function (decorated) {
        const $rendered = decorated.call(this);
        const self = this;

        const $selectAll = $(
            '<button type="button" class="btn btn-xs" style="margin: .7rem .3rem;">Select All</button>'
        );

        $rendered.find('.select2-dropdown').prepend($selectAll);

        $selectAll.on('click', () => {
            const $results = $rendered.find('.select2-results__option[aria-selected=false]');
            $results.each((i, elem) => {
                $(elem).trigger('mouseup');
            });

            self.trigger('close');
        });

        return $rendered;
    };

    return Utils.Decorate(Utils.Decorate(Dropdown, AttachBody), SelectAll);
});
