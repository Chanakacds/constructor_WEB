!(function(a) {
  a.widget('wp.wpdialog', a.ui.dialog, {
    open: function() {
      this.isOpen() ||
        !1 === this._trigger('beforeOpen') ||
        (this._super(), this.element.focus(), this._trigger('refresh'));
    }
  }),
    (a.wp.wpdialog.prototype.options.closeOnEscape = !1);
})(jQuery);
