MapImageIcon = {
    // Icon counter
    _mapIconCounter : 0,
    // Icon width
    iconW: 27,
    // Icon height
    iconH: 26,

    // Main function
    init: function() {
        var parentOffset, iconX, iconY, that = this, iconCoordsRow;

        // Image click handler
        jQuery('.map-image-holder img').on('click', function(event) {
            // Offset for parent element (from left top corner)
            parentOffset = jQuery(this).parent().offset();
            // Offset from left top corner to mouse cursor
            iconX = event.pageX - parentOffset.left - (Math.round(that.iconW/2));
            iconY = event.pageY - parentOffset.top - (Math.round(that.iconH/2));

            // Add icon on the image
            jQuery('<div class="map-image-icon"></div>')
                // Set id
                .attr('id', 'map-icon-' + (that._mapIconCounter))
                // Set position
                .css({top: iconY + 'px', left: iconX  + 'px'})
                .appendTo(jQuery(this).parent());

            // Add block with input elements holding icon coordinates
            jQuery('.map-points-holder').append('\
                <div><input type="text" name="iconCoords[' + that._mapIconCounter + '][x]" value=""/>\
                    <input type="text" name="iconCoords[' + that._mapIconCounter + '][y]" value=""/>\
                    <input type="text" name="iconCoords[' + that._mapIconCounter + '][text]" value=""/>\
                    <input type="button" data-icon-id="' + that._mapIconCounter + '" value="-"/>\
                </div>');
            // Get last added icon row
            iconCoordsRow = jQuery('.map-points-holder div:last');
            // Get first input and put X value
            iconCoordsRow.find('input:eq(0)').val(iconX);
            // Get second input and put Y value
            iconCoordsRow.find('input:eq(1)').val(iconY);

            that._mapIconCounter++;
        })

        // Add handler for 'delete icon' button
        this._mapIconDelete();
        // Debug panel (to view coordinates)
        this._mouseMoveDebug();
    },

    _mapIconDelete: function() {
        var mapIconId;
        jQuery('.map-points-holder').on('click', 'div input:button', function() {
            // Get icon id from data attr
            mapIconId = jQuery(this).data('iconId');
            jQuery(this).parent().remove();
            jQuery('#map-icon-' + mapIconId).remove();
        })
    },

    _mouseMoveDebug: function() {
        var parentOffset;
        jQuery('.map-image-holder img').on('mousemove', function(event) {
            parentOffset = jQuery(this).parent().offset();
            jQuery('.map-debug-holder')
                .html('<em>X: ' + (event.pageX - parentOffset.left) + '<br />Y: ' + (event.pageY - parentOffset.top) + '</em>');
        })
    },

    // Show icon set over image
    showIconSet: function(iconSet) {
        if (!window.iconSet) return false;

        // Image container
        var parent = jQuery('.map-image-holder');

        for (var i in iconSet) {
            jQuery('<div class="map-image-icon"></div>')
            .addClass('tooltip')
            .attr('title', iconSet[i].text)
            .attr('id', 'map-icon-' + i)
             // Set position
             .css({top: iconSet[i].y + 'px', left: iconSet[i].x  + 'px'})
             .appendTo(parent);
        }
        // Add tooltip
        parent.find('.tooltip').tooltipster();

        // Update icon counter
        this._initMapIconCounter();

    },

    _initMapIconCounter: function() {
//        alert(12)
        // Get amount of previously added icons
        var iconCount = jQuery('.map-image-holder .map-image-icon').length;
        this._mapIconCounter = iconCount > 0 ? iconCount : 0;
    }
};
